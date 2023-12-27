import random

total_questions = 10
alternatives = {0:'a', 1:'b', 2:'c', 3:'d', 4:'e'}
candidates = {0:'Marilda', 1:'Marcelo', 2:'Matheus'}

def question_simulator(grid_answers:list, total):
  global alternatives
  n = 0

  while n < total:
    n += 1
    answer = random.randint(0,4) #Número aleatório gerado de 0 a 4
    grid_answers.append(alternatives[answer])

  return grid_answers


def check_answers(answer_sheet, candidate):
  if(answer_sheet == candidate):
    return '1'
  else:
    return '0'
  
answer_sheet = []
answer_sheet = question_simulator(answer_sheet, total_questions)

corrections = []

more_successes = 0

total_candiates = len(candidates)

for index in range(total_candiates):
  print(f'Gabarito: {answer_sheet}')

  answer_candiate = []
  answer_candiate = question_simulator(answer_candiate, total_questions)
  print(f'{candidates[index]}:{answer_candiate}')

  correction = list(map(check_answers, answer_sheet, answer_candiate))

  successes = correction.count('1')

  print(f'{candidates[index]}: {correction} = {successes} acertos.')

  if(successes> more_successes):
    more_successes = successes
    winner = candidates[index]

print('')
print(f'O vencedor é {winner} com {more_successes} acertos!🏆')