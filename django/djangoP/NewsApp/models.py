from django.db import models
from django.utils import timezone

# Create your models here.

class News(models.Model):
	author = models.CharField(max_length=30)
	title = models.CharField(max_length=30)
	description = models.TextField()
	pub_date = models.DateField(default = timezone.now())

	def __str__(self):
		return self.author





class SportNews(models.Model):
	author = models.CharField(max_length=30)
	title = models.CharField(max_length=30)
	description = models.TextField()



class RegistrationData(models.Model):
	username = models.CharField(max_length=100)
	password = models.CharField(max_length=100)
	email = models.CharField(max_length=100)
	phone = models.CharField(max_length=100)

	def __str__(self):
		return self.username



class Publication(models.Model):
	"""docstring for Publication"""
	title = models.CharField(max_length=30)

	def __str__(self):
		return self.title

	class Meta:
		ordering = ('title',)


class Article(models.Model):
	headline = models.CharField(max_length=300)
	publication = models.ManyToManyField(Publication)

	def __str__(self):
		return self.headline

	class Meta:
		ordering = ('headline',)