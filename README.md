# uc-series-price
Drupal 7 module for Ubercart that allows you add a fixed setup cost(series cost) for a product that is ordered as a multiple.

Ubercart Series Price module README

This module hooks into Ubercart. It is designed for Drupal 7.

Author: Bart McLeod (mcleod@spaceweb.nl)

What does it do?

The goal is to allow a shop administrator to create products that have a fixed setup cost.

Say you sell T-Shirts with a custom print. It costs $ 50.00 to setup your production line and
12.00 dollars to print a T-Shirt. Then 1 T-shirt costs $62.00, while 10 T-shirts cost $ 170.00.

This can't be solved with Ubercart attributes and options. It can be solved with instructions along these
lines: "Dear customer, if you add a T-shirt to your shopping basket, you should also add the production
cost". But that's not something you will want to bother your customers with, right?

Ubercart Series Price tries to solve the issue for you.

It requires you to add two product classes, with the following ids:
- ucsp_series
- ucsp_series_cost

The series class required a field that is automatically setup for you when you enable the module.

I know I could have added the classes automatically too, but at the moment, I don't have the time for that. PR welcome.