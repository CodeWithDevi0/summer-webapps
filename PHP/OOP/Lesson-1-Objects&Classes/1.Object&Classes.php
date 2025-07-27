<!-- 
 
// PHP Objects //
In this lesson, you'll learn about PHP objects, how to define a class, and how to create an object from a class.

// What is an object? //
If you look at the world around you, you'll find many examples of tangible objects: lamps, phones, computers, cars, and etc.
Also, you can find intangible objects such as bank accounts and transactions.

All of  these objects share the two common key characteristics:
 - They have a state.
 - They have a behavior.

For example, a bank account has the state that consist of:
 - Account number.
 - Account balance.

A bank account has also the following behaviors:
 - Deposit money.
 - Withdraw money.

PHP objects are conceptually similar to real-world objects because they consist of state and behavior.
An object holds its state in variables that are often referred to as "properties".
An object also exposes its behavior via functions which are known as "methods".

// What is a class? //
In the real world, you can find many same kind of objects. For example, a bank has many bank accounts.
All of them have account numbers and balances.

These bank accounts are created from the same blueprint. In object-oriented programming terms, we say that an individual bank account is an instance of
a bank account class.

By definition, a class is a blueprint of objects. For example, from the Bank Account class, you can create many bank account objects.

The following illustrate the relationship between the "BankAccount" class and its objects.
From the "BankAccount" class you can create many "BankAccount" objects, and each object has its own number and balance.
here is an image example showing the bank account class and its objects.
<img src="https://www.phptutorial.net/wp-content/uploads/2021/03/PHP-Objects.png" alt="PHP Object">

// Defining a class //
To define a class, you use the "class" keyword followed by the class name and a pair of curly braces like this:
<?php
class ClassName{
    // class body
}
?>
By convention, you should follow these rules when defining a class:
 - A class name should be in upper camel case where each word starts with an uppercase letter. For example, "BankAccount", "UserProfile", and etc.
 - If a class name is a noun, it should be in a singular noun.
 - Define each class in separate file.

From the "BankAccount" class, you can create a new bank account object by using the "new" keyword like this:
<?php
class BankAccountSample{
    // class body
}

$account = new BankAccountSample();
?>
In this syntax, the $account is a variable that references the object created by the "BankAccount" class.
The parentheses that follow the "BankAccount" class name are optional. Therefore, you can create a new "BankAccount" object like this:
<?php
$account = new BankAccountSample;
?>
The process of creating a new object is also called "instantiation". In other words, you instantiate an object from a class. Or you create a new object from a class.
The "BankAccount" class is empty because it doesn't have any state and behavior.

// Adding properties to a class //
To add properties to the "BankAccount" class, you place variables inside it. For example:
<?php
class BankAccount{
    public $accountNumber; // property
    public $balance; // property
}
//The "BankAccount" class has two properties: $accountNumber and $balance.
//In front of each property, you use the "public" keyword to make it accessible from outside the class.
//To access a property, you use the object operator (->) followed by the property name like this:

$account = new BankAccount;
$account->accountNumber = 1234567890;
$account->balance = 1000;
echo "The bank account $account->accountNumber has a balance of $account->balance";
?>
Besides the "public" keyword, you can also use the "protected" and "private" keywords to define the visibility of a property.
Which you'll learn in the access modifiers lesson.

// Adding methods to a class //
The following shows the syntax for defining a method in a class:
<?php
class ClassNameSample{
    public function methodName($parameter_list){
        // method body
    }
}
?>
Like a property, a method also has one of the three visibility modifiers: public, protected, and private.
If you define a method without any visibility modifier, it defaults to public.

The following example defines the "deposit()" method for the "BankAccount" class:
<?php
class BankAccountAnotherSample{
    public $numberAccount;
    public $balance;

    public function deposit($amount){
        if ($amount > 0){
            $this->balance += $amount;
        }
    }
}

$account = new BankAccountAnotherSample();
$account->numberAccount = 1234567890;
$account->balance = 1000;
$account->deposit(100);
echo $account->balance;
?>
The "deposit()" method accepts an argument called "$amount". It checks if the "$amount" is greater than 0 before adding it to the balance.
To call a method, you also use the object operator (->) followed by the method name and a pair of parentheses like this:
$object->methodName($argument_list);
The new syntax in the "deposit()" method is the "$this" keyword.
The "$this" keyword/variable is the current object of the "BankAccountAnotherSample" class.

Similarly you can add a "withdraw()" method to the "BankAccountAnotherSample" class.
<?php
class BankAccountAnotherSample2{
    public $numberAccount;
    public $balance;
    
    public function deposit($amount){
        if ($amount > 0){
            $this->balance += $amount;
        }
    }

    public function withdraw($amount){
        if ($amount <= $this->balance){
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}
?>
The "withdraw()" method checks the current balance.
If the balance is less than the withdrawal amount, the "withdraw()" method returns false.
Later, you'll learn how to throw an exception instead. Otherwise, it deducts the withdrawal amount from the balance and returns true.

// Summary // 
 - Objects have states and behaviors
 - A class is a blueprint for creating objects
 - Properties represent the object's state, and methods represent the object's behavior. Properties and methods have visility.
 - Use the "new" keyword to create an object from a class.
 - Use the object operator (->) to access properties and methods of an object.
 - Use the "this" keyword to refer to the current object in a method.
 - Use the "class" keyword to define a class.



-->