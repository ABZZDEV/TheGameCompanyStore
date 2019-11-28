@echo off
cd /
REM This points to the correct directory for a local github install of the project.
cd C:\Users\abzzd\Documents\GitHub\TheGameCompanyStore\TeamX
python manage.py makemigrations
python manage.py migrate
python manage.py runserver 0.0.0.0:8000
pause