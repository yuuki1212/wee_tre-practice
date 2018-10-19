# -*- coding: utf-8 -*-

import scrapy

class event(scrapy.Item):
    id              = scrapy.Field()
    event_name      = scrapy.Field()
    event_title     = scrapy.Field()
    event_detail    = scrapy.Field()
    spot_id         = scrapy.Field()
    price           = scrapy.Field()
    event_date      = scrapy.Field()
    event_time      = scrapy.Field()
    event_category  = scrapy.Field()