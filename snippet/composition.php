<?php

namespace  Snippet;

new Subscription(new StripeGateway);

class Subscription {

    private Gateway $paymentGateway;

    public function  __construct(Gateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function create()
    {

    }

    public function cancel()
    {
        $this->findCustomer();

        $this->findCustomerSubsciption();
    }

    public function invoice()
    {

    }

    public function sawp()
    {

    }

}

interface Gateway
{
    public function findCustomer();

    public function findCustomerSubscription();
}

class StripeGateway  implements Gateway
{
    public function findCustomer()
    {

    }

    public function findCustomerSubsciption()
    {

    }
}

class BraintreeGateway implements Gateway
{

    public function findCustomer()
    {
        // TODO: Implement findCustomer() method.
    }

    public function findCustomerSubscription()
    {
        // TODO: Implement findCustomerSubscription() method.
    }
}
