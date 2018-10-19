# -*- coding: utf-8 -*-
import scrapy

class spot(scrapy.Item):
    id              = scrapy.Field()
    spot_name       = scrapy.Field()
    spot_title      = scrapy.Field()
    spot_detail     = scrapy.Field()
    address         = scrapy.Field()
    price           = scrapy.Field()
    card_info       = scrapy.Field()
    access          = scrapy.Field()
    preference      = scrapy.Field()
    regular_holiday = scrapy.Field()
    parking         = scrapy.Field()
    business_time   = scrapy.Field()
    phone           = scrapy.Field()
    category        = scrapy.Field()
    event_id        = scrapy.Field()
    site_url        = scrapy.Field()
