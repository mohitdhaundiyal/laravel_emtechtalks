while True:
    def add(num1,num2):
        print(num1+num2)
    def sub(num1,num2):
        print(num1-num2)
    def product(num1,num2):
        print(num1*num2)
    def divide(num1,num2):
        print(num1/num2)
    break

print('select operation')
print('1, Add')
print('2, Sub')
print('3, Product')
print('4, Divide')

opp = input()
opp = int(opp)

print('enter two numbers')
number1 = input('first number: ')
number2 = input('second number: ')
number1 = float(number1)
number2 = float(number2)


if(opp == 1):
    add(number1,number2)
elif(opp == 2):
    sub(number1,number2)
if(opp == 3):
    product(number1,number2)
if(opp == 4):
    divide(number1,number2)
