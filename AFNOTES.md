## A list of tasks for this app
### Forms
[Symfony forms](https://symfony.com/doc/6.4/forms.html)
- [x] Create a simple form for Task plain old PHP object
- [] Create the shipping items form type based on ChoiceType
- [] Add the shipping items form type to an OrderType form type 
- [] Create the postal items custom form type
- [x] Create the Task class for a Todo list
- [x] Create a category field for Task POPO
- [x] Create a category field for the Product entity
- [x] Put a choice constraint on the category field in Task and Product
- [x] Create a migration for the category field in Task and Product
- [x] Execute the migration for the category field, confirm it works
- [x] Update foundry for the Product entity to add categories
- Though at src/Entity/Task.php it is a plain-old-PHP-object NOT a doctrine entity
- It is a normal PHP object
- [x] Run php bin/console debug:form
- [ ] php bin/console debug:form BirthdayType
- [ ] php bin/console debug:form for ButtonType,CheckboxType, ChoiceType,CollectionType
- [ ] Also run it for ColorType, CurrencyType, DateType, FileType
- [ ] Also run it for FormType, HiddenType, LanguageType, MoneyType, PasswordType
- [ ] Also run it for PercentType, RadioType, RangeType, RepeatedType
- [ ] Also run it for ResetType, searchType, SubmitType, TelType, TimeType, UrlType, WeekType
### Entities
[Doctrine and entities](https://symfony.com/doc/6.4/doctrine.html)
- [x] Create the Product entity
- [x] Create a Category field with a choice constraint to constrain string values to an array
- [x] Define the array as constant at the top of the the Entity class
- [] Create the Category entity and relate it to the Product entity
### Security
[Symfony security](https://symfonycasts.com/screencast/symfony-security)
- [x] Composer install security components: `composer require security`
[ ] 
### Platform.sh deployment
- [x] Use sym6-forms git hub repository to deploy to Platform.sh
- [x] Install platform-cli on Mac and Linux desktop
- [x] Initiate platform project using platform-cli on local
- [x] Deploy Platform.sh project from local to Platform.sh
- [x] Add relationship for the postresql:16 database
- [x] Update plan for the project to 'essential' or 'standard' to allow custom domain
### Custom domain
- [] Create a new domain on Godaddy or AWS for cymfony.com or similar
- [] Park the Platform.sh project on the domain by configuring a canonical record
### Markdown examples
`code`
Link 	[title](https://www.example.com)
**bold text**
Unordered list
- First item

  Fenced code block
```
{
  "firstName": "John",
  "lastName": "Smith",
  "age": 25
}
```
Emoji
That is so funny! :joy: 

