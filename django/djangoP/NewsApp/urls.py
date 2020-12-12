from django.urls import path
from .views import NewsP, Home, Contact, NewsDate, Register, addUser, modelform, addModalForm


urlpatterns = [
    path('news/', NewsP, name = 'news'),
    path('', Home, name = 'home'),
    path('contact/', Contact, name = 'contact'),
    path('newsdate/<int:year>', NewsDate, name = 'newsdate'),
    path('signup/', Register, name = 'signup'),
    path('addUser/', addUser, name = 'addUser'),
    path('modalform/', modelform, name = 'form'),
    path('addmodalform/', addModalForm, name = 'modalform'),

]
