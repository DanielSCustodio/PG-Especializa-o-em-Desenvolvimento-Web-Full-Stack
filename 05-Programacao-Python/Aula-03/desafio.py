phone_book = {}

def include(name, phone):
  phone_book.update({name:phone})

def print_phone_book():
  print('L I S T A  T E L E F Ô N I C A')
  for item in phone_book:
    print(f'{item}: {phone_book[item]}')
  print('-----------------------------')

def exclude(name):
  phone = phone_book.get(name)
  for item in phone_book:
    if(phone == phone_book[item]):
      del phone_book[name]
      return print(f'O contato {name} foi excluído.')
  print(f'O contato {name} não pertence a sua lista de contato🤔')

def search(name):
  phone = phone_book.get(name, 'inexistente, verifique o nome digitado🤔')
  print(f'O telefone de {name} é {phone}')

include('Batman','(32)8523-5632')
include('Superman','(64)2356-8569')
include('Lanterna Verde','(90)8763-9898')
include('Coringa','(32)8563-2121')
print_phone_book()
exclude('Arqueiro Verde')
exclude('Coringa')
print_phone_book()
search('Arqueiro Verde')
search('Batman')



