string = input('enter string from which vowels are need to be remove ')
string = string.lower()
vowels = ('a','e','i','o','u')

for c in string:
    if string in vowels:
        new_str = string.replace(c,'')
    print(new_str)
