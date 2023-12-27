import operator

list_numbers = [4,9,16,25]

result = [n*2 for n in list_numbers]
print(result)

result:list = map(operator.mul, list_numbers, list_numbers)
print(list(result))