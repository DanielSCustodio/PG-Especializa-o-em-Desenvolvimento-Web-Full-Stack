_list  = ['Maria', 23, 'Porto Alegre'] #List
print(_list[0])
print(_list[1])
print(_list[2])
n = _list.index('Porto Alegre')
print(n)

sub_list = ['Maria', 23, ['Porto Alegre', 'Rio De Janeiro']]
print(sub_list[2][1])
sub_list[2][1] = 'Maricá'
print(sub_list[2][1])

all_list = _list + sub_list
print(all_list)
print(all_list[5][1])

list_numbers = [10,25,38,56,24,12,1,5,8,85,25]
print(max(list_numbers))
print(min(list_numbers))
print(sum(list_numbers))

musical_notes = ['do', 'mi', 'fa', 'sol', 'la']
musical_notes.insert(0, 're')
musical_notes.append('si')
print(musical_notes)

del musical_notes[0]
print(musical_notes)
del musical_notes[1:3]
print(musical_notes)

musical_notes = ['do', 're', 'mi', 'fa', 'sol', 'la', 'si']
print(musical_notes)

last = musical_notes.pop()
first = musical_notes.pop(0)
print(musical_notes)
print(last)
print(first)

list_numbers = [10,25,38,56,24,12,1,5,8,85,25]
list_numbers.remove(25) #Remove o primeiro elemento da lista que satisfaça a condição
print(list_numbers)
list_numbers.clear()
print(list_numbers)

list_numbers = [10,25,38,56,24,12,1,5,8,85,25]
list_numbers.sort()
print(list_numbers)
list_numbers.reverse()
print(list_numbers)
print('Tamanho da lista: ',len(list_numbers))

lenght = len(list_numbers)

for index in range(0, lenght):
  print(list_numbers[index])

print('-------------------------------------------')

for item in list_numbers:
  print(item+1000)

