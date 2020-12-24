# -*- coding: utf-8 -*-
"""
Created on Wed Nov 25 17:01:25 2020

@author: FACULTY OF SCIENCE
"""

import tkinter as tk
import requests
from PIL import Image, ImageTk

app = tk.Tk()

HEIGTH = 500
WIDTH = 600

def format_response(weather_json):
    try:
        city = weather_json['name']
        conditions = weather_json['weather'][0]['description']
        temp = weather_json['main']['temp']
        final_str = 'City: %s \nConditions: %s \nTemperature (*F): %s' % (city, conditions, temp)
    except:
        final_str = 'There was a problem retrieving that information'
        
    return final_str




app.mainloop()