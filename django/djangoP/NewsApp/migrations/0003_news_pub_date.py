# Generated by Django 3.1.3 on 2020-12-02 13:54

import datetime
from django.db import migrations, models
from django.utils.timezone import utc


class Migration(migrations.Migration):

    dependencies = [
        ('NewsApp', '0002_sportnews'),
    ]

    operations = [
        migrations.AddField(
            model_name='news',
            name='pub_date',
            field=models.DateField(default=datetime.datetime(2020, 12, 2, 13, 54, 57, 47985, tzinfo=utc)),
        ),
    ]
