
n_int = 10
print(n_int)
n_float = 2.5
print(n_float)
v_bool = True
print(v_bool)
t_str = 'José'
print(t_str)
n1 = 123
n2 = 65656565688656566868846498
print(n1, ',' , n2)
print(n_float)
""" name = input('Digite seu Nome: ')
print(name)
age = int(input('Qual a sua idade: '))

print(f'Olá, {name}!, você nem parece que tem {age} anos!😁') """
n1 = 3
n2 = 4.5
n1 += n2
print(n1)

text = str(65)
print(text)
text += str(35.8)
print(text)

n1 = int('34')
n2 = float ('34.5')

print(n1, ',', n2)

def print_message():
  print('Olá, mundico!')

print_message()

def print_local():
  global n1 
  n1 = 10
  print('A variável local é',n1)

print_local()
print(n1)

client = 'João'
step = 0
status = 'Aguardando novo pedido'

def deliver():
  global step
  step += 1
  status = 'Pedido Entregue'
  print(f'Passo {step}: {status} ao {client}!')

def prepare():
  global step
  step += 1
  status = 'Em preparação...'
  print(f'Passo {step}: {status}')
  deliver()

def to_meet():
  global step
  step += 1
  status = 'Pedido Recebido.'
  print(f'Passo {step}: {status}')
  prepare()

to_meet()
print(status)

