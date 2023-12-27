import math
import operator

list_numbers = [4,9,16,25]

def sqrt_map(list_numbers):
  result:list = []

  for number in list_numbers:
    result.append(math.sqrt(number)) # Já transforma em lista

  return result

result_map  = sqrt_map(list_numbers)
print(result_map)

list_one = [1,2,3,4,5]
list_two = [6,7,8,9,10]

def multiplication(list_one, list_two):
  length = len(list_one)
  result:list = []

  for index in range(length):
    n1 = list_one[index]
    n2 = list_two[index]
    result.append(operator.mul(n1,n2))

  return result

multiplication(list_one, list_two)


map_multiplication = map(operator.mul, list_one, list_two)
print(list(map_multiplication))
print(list( multiplication(list_one, list_two)))