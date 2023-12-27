dict_name = {'123':'Maria', '124':'Jõao', '125':'José'}
print(dict_name)
print(dict_name['123'])

list = [('223', 'Joe'), ('224','Jhon'), ('225', 'April')]
dict_list = dict(list)
print(dict_list)

dict_name['125'] = 'Val'
name = dict_name.get('125')
print(name)

dict_name['126'] = 'Pedro'
dict_name.update({'127':852.02, 128: True})
print(dict_name)
print(dict_name[128])

del dict_name['126']
print(dict_name)

name_deleted = dict_name.pop('141', 'Tem nada para ser excluído 🤔')
print(name_deleted)

name_deleted = dict_name.pop('124', 'Tem nada para ser excluído 🤔')
print(name_deleted)

for item in dict_name:
  print(item, dict_name[item])

print(dict_name.keys())
print(dict_name.values())
print(dict_name.items())