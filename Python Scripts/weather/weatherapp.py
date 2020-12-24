import tkinter as tk
from tkinter import font
import requests

HEIGHT =500
WIDTH=600




def test_function(entry1):
	print("Get weather Report Here " + entry1)

def format_weather(weather):
	try:
		name  = weather['name']
		desc =  weather['weather'][0]['description']
		temp = weather['main']['temp']

		final_str = 'City: %s \nCondition: %s \nTemperature: %s' % (name, desc, temp)
	except:
		final_str = 'There was a problem retrieving this information.'
	return final_str


def get_weather(city):
	weather_key = 'b42c71d589ed012d20ec039444e75ca1'
	url = 'http://api.openweathermap.org/data/2.5/weather'
	params = {'appid': weather_key, 'q': city, 'units': 'standard'}
	response = requests.get(url, params=params)
	weather = response.json()

	label['text'] = format_weather(weather)


root = tk.Tk()

canvas=tk.Canvas(root, height=HEIGHT, width=WIDTH)
canvas.pack()

bg_image = tk.PhotoImage(file='pyimages/hpppimg.png')
bg_label = tk.Label(root, image=bg_image)
bg_label.place(relwidth=1, relheight=1)

frame=tk.Frame(root, bg="green", bd=5)
frame.place(relx=0.5,rely=0.1, relwidth=0.75, relheight=0.08, anchor='n')

entry1 = tk.Entry(frame, font=40)
entry1.place(relx=0.01,rely=0.1, relwidth=0.65, relheight=0.75)

button = tk.Button(frame, text="Get Weather",font=40, fg="red", command=lambda: get_weather(entry1.get()))
button.place(relx=0.68,rely=0.1, relwidth=0.3, relheight=0.75)

# second frame
sec_frame=tk.Frame(root, bg="green")
sec_frame.place(relx=0.5,rely=0.25, relwidth=0.75, relheight=0.5, anchor='n')

label = tk.Label(sec_frame, font=('Lucida Console', 12), anchor='nw', justify='left', bd=4)
label.place(relx=0.021,rely=0.021, relwidth=0.95, relheight=0.95)



# print(tk.font.families())

root.mainloop()




# C:\Users\FACULTY OF SCIENCE\Documents\Python Scripts




