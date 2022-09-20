# billingo-communication-wordpress

This is one way to communicate with Billingo API v3 (https://app.swaggerhub.com/apis/Billingo/Billingo) using Wordpress' built in method.

Not a full version of invoicing, only an idea to implement any application.

function billingorequest( $proto, $page, $parameters = null, $arguments = null) {

example #1
proto: GET
page: /documents
parameters: e.g. block_id, partner_id, etc.
arguments: 

example #2
proto: POST
page: /documents
parameters: 
arguments: all the parameters required, partner_id, block_id, currency, date, invoice_items, etc.
