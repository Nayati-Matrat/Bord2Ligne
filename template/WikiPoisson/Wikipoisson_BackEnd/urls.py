from django.urls import path
from . import views

urlpatterns = [
    path('donnees/', views.obtenir_donnees, name='obtenir_donnees'),
]
