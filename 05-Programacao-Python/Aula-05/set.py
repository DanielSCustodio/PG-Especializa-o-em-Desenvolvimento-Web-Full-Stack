a = {1,2,3,4}
b = {3,4,5,6}
list_a = [1,2,3,4]
list_b = [3,4,5,6,7]

print(f'União: {a.union(b)}')
print(f'Intersecção: {a.intersection(b)}')
print(f'Diferença de A: {a.difference(b)}')
print(f'Diferença de B: {b.difference(a)}')
print(f'Intersecção de lista: {set(list_a).intersection(list_b)}')
a.intersection_update(b)
print(f'Update A: {a}')
a = {1,2,3,4}

union_list = list(set(list_a).union(list_b))
print(union_list)





