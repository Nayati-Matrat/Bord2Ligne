from django.db import models

class VotreModele(models.Model):
    champ1 = models.CharField(max_length=100)
    champ2 = models.IntegerField()

    def __str__(self):
        return self.champ1
