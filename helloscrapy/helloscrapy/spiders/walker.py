# -*- coding: utf-8 -*-
import scrapy
import re
from helloscrapy.spot import spot
from helloscrapy.event import event
from urlparse import urlparse
from helloscrapy.const import ADDRESS, ACCESS, RESERVATION, BUSINESS_TIME, REGULAR_HOLIDAY, PARKING, PHONE, CATEGORY, SITE_URL, CARD_INFO, PRICE, EVENT_DATE, EVENT_TIME

class WalkerSpider(scrapy.Spider):
    name = 'walker'
    allowed_domains = ['www.walkerplus.com']
    url = 'https://www.walkerplus.com'
    start_urls = [
        url + '/spot_list/'
    ]
    first_flg = True

    def parse(self, response):
        for href in response.css('li.m-mainlist__item a.m-mainlist-item__ttl::attr("href")').extract(): # リストを取得
            yield scrapy.Request(self.url + href, self.parseItem)
        for href in response.css('li.m-mainlist__item a.m-pickup::attr("href")').extract(): # リストを取得
            yield scrapy.Request(self.url + href, self.parseItemEvent)
        if self.first_flg:
            self.first_flg = False
            for i in range(100):
                url = self.start_urls[0] + str(i + 1) + '.html'
                yield scrapy.Request(url, self.parse)

    def parseItem(self, response):
        item = spot()
        # URLからidを取得
        parsed = urlparse(response.url)
        id = parsed.path.split('/')[2]
        item['id'] = id
        item['spot_name']   = response.css('section h1::text').extract_first()
        item['spot_title']  = response.css('section h2::text').extract_first()
        item['spot_detail'] = response.css('section p.m-articleset--3__lead::text').extract_first()

        yield scrapy.Request(response.url + 'data.html', callback=self.parseData, meta={'item' : item})

    def parseItemEvent(self, response):
        item = event()
        # URLからidを取得
        parsed = urlparse(response.url)
        id = parsed.path.split('/')[2]
        item['id'] = id
        item['event_name']   = response.css('section h1::text').extract_first()
        item['event_title']  = response.css('section h3::text').extract_first()
        item['event_detail'] = response.css('section p.m-articleset--3__lead::text').extract_first()

        yield scrapy.Request(response.url + 'data.html', callback=self.parseDataEvent, meta={'item' : item})

    def parseData(self, response):
        item = response.meta['item']
        table = response.css('table.m-infotable__table tr.m-infotable__row')

        item['address']         = self.getData(table, ADDRESS)
        item['access']          = self.getData(table, ACCESS)
        item['business_time']   = self.getData(table, BUSINESS_TIME)
        item['regular_holiday'] = self.getData(table, REGULAR_HOLIDAY)
        item['parking']         = self.getData(table, PARKING)
        item['phone']           = self.getData(table, PHONE)
        item['category']        = self.getData(table, CATEGORY, True)
        item['site_url']        = self.getData(table, SITE_URL, True)

        yield scrapy.Request(self.url + '/spot/' + item['id'] + '/price.html', callback=self.parsePrice, meta={'item' : item})

    def parseDataEvent(self, response):
        item = response.meta['item']
        table = response.css('table.m-infotable__table tr.m-infotable__row')

        item['event_date'] = self.getData(table, EVENT_DATE)
        item['event_time']   = self.getDataPrice(table, EVENT_TIME)

        yield scrapy.Request(self.url + '/event/' + item['id'] + '/price.html', callback=self.parsePriceEvent, meta={'item' : item})

    def parsePrice(self, response):
        item = response.meta['item']
        table = response.css('table.m-infotable__table tr.m-infotable__row')

        item['price']       = self.getDataPrice(table, PRICE)
        item['card_info']   = self.getDataPrice(table, CARD_INFO)
        yield item

    def parsePriceEvent(self, response):
        item = response.meta['item']
        table = response.css('table.m-infotable__table tr.m-infotable__row')

        item['price']       = self.getDataPrice(table, PRICE)
        yield item

    def getData(self, item, key, option=False):
        result = []
        for tr in item:
            if tr.css('th::text').extract_first() == key:
                for elm in tr.css('td a::text' if option else 'td p::text').extract():
                    result.append(elm)
                return result

    def getDataPrice(self, item, key):
        result = []
        for tr in item:
            for elm in tr.css('td::text').extract():
                result.append(elm)
            return result
