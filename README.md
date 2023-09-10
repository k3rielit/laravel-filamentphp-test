# Breezy Shoes

We sell shoes. Particularly Laravel 10.X shoes.

Get your limited time 10% discount with the code FILAMENT10 at checkout.

## Tasks

1. Create an **Order model** and a **database migration** with the following fields: `integer('id')`, `string('product_name')`, `integer('quantity')`, `integer('status_id')`.

2. Create a **database seeder** which creates 2 Orders with arbitrary data.

3. Create a **Status model** and a **database migration** with the following fields: `integer('id')`, `string('name')`, `boolean('is_active')`.

4. Create a **Status resource** which shows the id and name of each Status model, and makes adding and editing Statuses possible.

5. Create an **Order resource** which displays all available information about Orders in a table, and makes adding and editing Orders possible. During creation and editing, make the Status selectable from a Dropdown containing already added Statuses. Only show Statuses which are active.

6. Create an **Item model**, a **database migration** and a **resource** which displays all available information about products in a table, and makes adding and editing Items possible. The Item model has the following fields: `integer('id')`, `string('name')`, `string('condition')`, `string('color')`. The condition should be displayed as a Dropdown, and the color as a ColorPicker.

7. Add a **RelationManager** to the **Order resource**, which makes assigning products to Orders possible. One product can be assigned to multiple Orders. Don't forget to make a pivot table, and the creation of the necessary Order and Item methods.

8. Add a way to search the **Order resource** table.

9. Add an active and not active filter to the **Status resource** table.

## Useful resources

- [Migrations](https://laravel.com/docs/10.x/migrations) - Changes the database schema
- [Eloquent](https://laravel.com/docs/10.x/eloquent) - Creating and managing models
- [Resources](https://laravel.com/docs/10.x/eloquent-resources) - API layer transforming models/model collections into JSON
- [Factories](https://laravel.com/docs/10.x/eloquent-factories) - Set default model attribute values, generate objects
- [Seeding](https://laravel.com/docs/10.x/seeding) - Insert data into the database manually or via factories
- [Pivot tables](https://laravel.com/docs/10.x/eloquent-relationships) - Database relationships
