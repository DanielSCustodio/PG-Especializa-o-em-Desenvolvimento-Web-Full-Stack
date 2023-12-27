tuple_one = tuple("aeiou785,25.8,785asd")
tuple_two = "a", "e", "i", "o", "u"
tuple_three = ("a", "e", "i", "o", "u")
tuple_empty = ()

print(tuple_one)
print(tuple_two)
print(tuple_three)
print(tuple_empty)

tuple_one_element=(1,)
tuple_integer = (1)

print(type(tuple_one_element))
print(type(tuple_integer))


print(tuple_two[-1])
print(tuple_two[0])
print(tuple_two[1:3])


tuple_list = (1,2,['a','b','c'])
tuple_list[2][2] = 'z'
print(tuple_list)

tulpe_week = ('Segunda', 'Terça')
tulpe_week += ('Quarta','Quinta', 'Sexta')
print(tulpe_week)

lenght = len(tulpe_week)

for index in range(0, lenght):
  print(tulpe_week[index])

for index in tulpe_week:
  print(f'Hoje é {index}')
