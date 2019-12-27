LARAVEL REST APIs 

# Rest_laravel_api
1. create a new laravel project
        laravel new Rest_api
2. creat a controller 
        example: ```php artisan make:controller coutry/Countrycontroller```
3. create a model
        example ```php artisan make:model CountryModel```
4. create a function on controller to return the results in json format
    import the model in the controller to use the model
    ```use App\Models\CountryModel;```
        public fucntion country()
            {
            return response()->json(ModelName::get(), Responce (200));
            }
N/B dont inlude Responce () just use 200 for success return of json
5. define your $table as protected and all the fields that are to be mass filled

        protected $table = "table_name";
        Protected $fillable = [
             'field_1',
            'filed_2',
        ];
6. create Route in the routes/api.php 
        Route::get('view', 'ControllerName@function');
7. php artisan serve 
    ```127.0.0.1:8000/api/view```