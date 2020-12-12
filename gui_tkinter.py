import sys
# print(sys.version)

import tkinter as tk
import random

window = tk.Tk()
window.title("My App")
window.geometry("400x400")

def phrase_generator():
	phrases = ["Hello ","Hi ", "How is Life "]
	name = str(entry1.get())
	return phrases[random.randint(0,2)] + name


def phrase_display():
    greeting = phrase_generator()
    
    greeting_display = tk.Text(master=window, height=10, width=30)
    greeting_display.grid(column=0, row=3)
    
    greeting_display.insert(tk.END, greeting)




# LABEL
label1 = tk.Label(text='Welcome sylvas')
label1.grid(column=0, row=0)

label2 = tk.Label(text='What is your name')
label2.grid(column=0, row=1)

entry1 = tk.Entry()
entry1.grid(column=1, row=1)


button = tk.Button(text='Click Here', command=phrase_display)
button.grid(column=1, row=2)
