import pandas as pd
import pyautogui
import time

pyautogui.PAUSE = 0.4
# Read a table xlsx
tabela = pd.read_excel(".xlsx")
# print(tabela)

pocsag = []
idx = 172
for linha in tabela.index:
    pyautogui.click(x=939, y=469)
    codigo = tabela.loc[linha, "UNIDADE"]  # Hold the value in table

    pyautogui.hotkey("ctrl", "a")
    pyautogui.write(str(codigo))  # Paste in BKO, UNIT ID
    pyautogui.click(x=1171, y=455)  # Click in search
    time.sleep(2)

    # selection of options  from the white list

    pyautogui.click(x=1121, y=704)  # WHITELIST
    time.sleep(2)
    pyautogui.click(x=1318, y=681)  # MANAGED
    time.sleep(2)
    pyautogui.click(x=1490, y=702)  # KAYPAD
    time.sleep(2)
    pyautogui.click(x=249, y=543)  # SAVE
    time.sleep(5)
    pyautogui.click(x=1218, y=236)

    # CRIANDO UMA LISTA COM TODOS AS UNIDADE ATIVADAS
    pocsag.append(codigo)
    # Pause
    if linha == idx:
        print("ÚTIMO INDEX ", linha)

        break

print(pocsag)
