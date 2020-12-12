from django import forms
from .models import RegistrationData

class RegistrationForm(forms.Form):
	username = forms.CharField(max_length=100,
		widget = forms.TextInput(attrs={
			'class': 'form-control',
			'placeholder':'Username'
			}))
	password = forms.CharField(max_length=100,
		widget = forms.PasswordInput(attrs={
			'class': 'form-control',
			'placeholder':'Password'
			}))
	email = forms.CharField(max_length=100,
		widget = forms.EmailInput(attrs={
			'class': 'form-control',
			'placeholder':'Email'
			}))
	phone = forms.CharField(max_length=100,
		widget = forms.NumberInput(attrs={
			'class': 'form-control',
			'placeholder':'Phone'
			}))



class RegistrationModal(forms.ModelForm):
	class Meta(object):
		model = RegistrationData

		fields = [
			'username',
			'password',
			'email',
			'phone'
		]

		widgets = {
			'username':forms.TextInput(attrs={
			'class': 'form-control',
			'placeholder':'Username'
			}),

			'password':forms.TextInput(attrs={
			'class': 'form-control',
			'placeholder':'password'
			}),

			'email':forms.TextInput(attrs={
			'class': 'form-control',
			'placeholder':'email'
			}),

			'phone':forms.TextInput(attrs={
			'class': 'form-control',
			'placeholder':'phone'
			})
		}
		
			