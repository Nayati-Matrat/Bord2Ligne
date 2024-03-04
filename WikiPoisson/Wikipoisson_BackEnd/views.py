from django.http import JsonResponse
from .models import VotreModele

def obtenir_donnees(request):
    donnees = list(VotreModele.objects.values())
    return JsonResponse(donnees, safe=False)
