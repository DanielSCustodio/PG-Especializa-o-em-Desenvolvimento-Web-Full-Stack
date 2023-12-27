n1 = float(input('Digite o 1º Número: '))
n2 = float(input('Digite o 2º Número: '))
n3 = float(input('Digite o 3º Número: '))

def read_numbers():
  global n1,n2, n3
  print(f'Os números lidos são: {n1}, {n2} e {n3}')

def sum_numbers():
  global n1,n2, n3
  total_sum = n1 + n2 + n3
  print(f'A soma é: {total_sum}')

def average_numbers():
  global n1,n2, n3
  avg = (n1 + n2 + n3)/3
  print(f'A média é: {avg}')


read_numbers()
sum_numbers()
average_numbers()