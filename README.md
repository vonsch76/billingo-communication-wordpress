# billingo-communication-wordpress

This is one way to communicate with Billingo API v3 (https://app.swaggerhub.com/apis/Billingo/Billingo) using Wordpress' built in method.

Not a full version of invoicing, only an idea to implement any application.

function billingorequest( $proto, $page, $parameters = null, $arguments = null) {

example #1 - list all invoices
proto: GET
page: /documents
parameters: e.g. block_id, partner_id, etc.
arguments: (none required)

example #2 - create an invoice
proto: POST
page: /documents
parameters: 
arguments: all the parameters required, partner_id, block_id, currency, date, invoice_items, etc.

example #3 - get an invoice details
proto: GET
page: /documents
parameters: {id}
arguments: (none required)

with data - create an invoice

example #4 - create a receipt
proto: POST
page: /documents/receipt
parameters: 
arguments: 

(
    [name] => customername
    [emails] => Array
        (
            [0] => customermail@mail.com
        )
    [phone] => customerphone
    [block_id] => billingo block id
    [type] => receipt
    [payment_method] => bankcard
    [currency] => EUR
    [electronic] => 1
    [conversion_rate] => 382.42
    [items] => Array
        (
            [0] => Array
                (
                    [name] => receipt on order 235521957
                    [unit_price] => 2234
                    [vat] => 27%
                )
        )
)

Reply: 201 and receipt data when successful. 4xx in case of error, details are in the body.

Creating an invoice is usually 2 steps: a) you need to create a partner,then b) create an invoice with partner data.

Check Billingo API v3 documentation for details. Mandatory fields, etc.

Proto: GET, POST, PUT, DELETE
page: many... /documents, /partners, /products
parameters: {id}, etc.
arguments: plenty, see Billingo documentation (schema) for the required arguments on each page

