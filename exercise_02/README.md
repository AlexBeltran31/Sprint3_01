BankPayment simulation in PHP
This exercise demostrates how to apply the D in SOLID (Dependency Inversion Principle) in PHP.
In the original code, PaymentProcessor depended directly on StripePaymentGateway; changing the payment method required editing the class.
Result:
By introdcing the PaymentGatewayInterface, we achieved:
-Loose coupling between classes.
-Better scalability (easy to add new payment methods).
-Code that follows SOLID design principles.
