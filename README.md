## Appointment Scheduling
As a patient using a telehealth platform, I want to be able to schedule appointments with healthcare providers for remote consultations.


## Usage
1. docker-compose up -d
2. docker-compose exec web bash
3. composer install

## Run
php artisan serve --host=0.0.0.0 --port=8070

### Code style
Using [oskarstark](https://github.com/OskarStark/php-cs-fixer-ga) to autofix phpcs
```
docker run --rm -it -w=/app -v ${PWD}:/app oskarstark/php-cs-fixer-ga:latest
```

## Debug
Update `xdebug.start_with_request=no` to yes in xdebug.ini

## Endpoints
Add new appointment
```
POST  http://localhost:8070/api/appointments

{
    "patient_id": 1,
    "provider_id": 2,
    "datetime": "2024-03-20 10:00:00"
}
```

Retrieve Appointments
```
GET http://localhost:8070/api/appointments

```

## Usage
1. docker-compose up -d
2. docker-compose exec web bash
3. composer install
4. php artisan migrate
5. php artisan db:seed

 