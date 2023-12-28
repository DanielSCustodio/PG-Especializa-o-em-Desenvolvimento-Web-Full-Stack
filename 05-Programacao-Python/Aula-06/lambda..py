sum_lambda = lambda numero1, numero2: numero1 + numero2
print(sum_lambda(3,5))

sum = lambda: 3+2
print(sum())

good_morning = lambda: print('Bom dia!')
good_morning()

numbers = [0,2,5,6,8,7,4,5,6,9]
even_list = []

for item in numbers:
  if(item % 2 == 0):
    even_list.append(item)

for even in even_list:
  print(even)

print("")

even = filter(lambda n: n % 2 == 0, numbers )
for even in even_list:
  print(even)


users = [
  {
    'id' : 1,
    'name' : 'Allan',
    'age' : 25,
    'profile_picture' : 'https://...',
    'city' : 'São Paulo'
  },

  {
    'id' : 2,
    'name' : 'Julie',
    'age' : 29,
    'profile_picture' : 'https://...',
    'city' : 'Curitiba'
  },

  {
    'id' : 3,
    'name' : 'Pedro',
    'age' : 31,
    'profile_picture' : 'https://...',
    'city' : 'Rio de Janeiro'
  }
]

def users_over_25(user):
  return user["age"] > 25

filtered_users = filter(users_over_25, users) # Recebe uma função e um parâmetro
print(list(filtered_users))

print("")

filtered_users = filter(lambda user: user["age"] > 25, users)
print(list(filtered_users))

items = [1,2,3,4,5]
double = list(map(lambda x: x*2, items))
print(double)