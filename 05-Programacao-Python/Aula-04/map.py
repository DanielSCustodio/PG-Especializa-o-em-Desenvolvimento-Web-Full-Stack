def double(n):
  return n * 2

numbers = (5,4,3,2,1)
double_numbers = map(double,numbers) # O argumento tem que ser iteirativo(coleções)
print(double_numbers)
print(tuple(double_numbers))

index = (2,2,2,2,2)
result= map(pow, numbers, index)
print(list(result))

def capitalize(n):
  return n.capitalize()

animals = ('dog', 'cat', 'bird')
map_animals = map(capitalize, animals)
print(list(map_animals))

