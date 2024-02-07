# billingo-communication-wordpress

This is one way to communicate with Billingo API v3 (https://app.swaggerhub.com/apis/Billingo/Billingo) using Wordpress' built in method.

Not a full version of invoicing, only an idea to implement any application.

function billingorequest( $proto, $page, $parameters = null, $arguments = null) {

example #1 - list all invoices
proto: GET
page: /documents
parameters: e.g. block_id, partner_id, etc.
arguments: 

example #2 - create an invoice
proto: POST
page: /documents
parameters: 
arguments: all the parameters required, partner_id, block_id, currency, date, invoice_items, etc.

example #3 - get an invoice details
proto: GET
page: /documents
parameters: {id}
arguments: all the parameters required, partner_id, block_id, currency, date, invoice_items, etc.

Check Billingo API v3 documentation for details.
Proto: GET, POST, PUT, DELETE
page: many... /documents 
