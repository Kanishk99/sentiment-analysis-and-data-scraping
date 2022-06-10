import scrapy
from pathlib import Path
#scrapy runspider amazon_reviews.py -o output.csv
class AmazonReviewsSpider(scrapy.Spider):
    
    # Spider name
    name = 'amazon_reviews'

    # Domain names to scrape
    allowed_domains = ['amazon.in']

    # Base URL for the MacBook air reviews
    txt = Path('link_store.txt').read_text()
    myBaseUrl = txt[:-1]

    #myBaseUrl = "https://www.amazon.in/All-new-Echo-Dot/product-reviews/B084L41R96/ref=cm_cr_arp_d_paging_btm_next_2?ie=UTF8&reviewerType=all_reviews&pageNumber="
    start_urls=[]

    # Creating list of urls to be scraped by appending page number a the end of base url
    for i in range(1,200):
        start_urls.append(myBaseUrl+str(i))

    # Defining a Scrapy parser
    def parse(self, response):
            data = response.css('#cm_cr-review_list')

            #Get the Name
            name = data.css('.a-profile-name')

            #Get the Review Title
            title = data.css('.review-title')
            
            # Collecting product star ratings
            star_rating = data.css('.review-rating')

            # Collecting user reviews
            comments = data.css('.review-text')
            count = 0

            # Combining the results
            for review in star_rating:
                yield{#'Name':''.join(name[count].xpath(".//text()").extract()),
                      #'Title':''.join(title[count].xpath(".//text()").extract()).strip(),
                      'Rating': ''.join(review.xpath('.//text()').extract()).replace(" out of 5 stars",""),
                      'Comment': ''.join(comments[count].xpath(".//text()").extract()).replace("The media could not be loaded.","\n").strip()
                }
                count=count+1



