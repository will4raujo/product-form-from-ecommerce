# Product Registration Form for E-commerce API

This project demonstrates a web-based product registration form designed for an e-commerce API. The form captures detailed product information and submits it to the API for inventory management, making it suitable for online stores and e-commerce platforms.

## Features

- **Comprehensive Product Details**: The form allows users to input various product details such as name, SKU, description, pricing, dimensions, weight, brand, and more.
- **Product Variations**: Users can add multiple variations of a product, each with its own SKU, quantity, and specifications.
- **Dynamic Image Handling**: The form supports dynamic addition and removal of product images and specifications, enhancing flexibility.
- **API Integration**: Once the form is filled out, it submits the data to a specified API endpoint, ensuring seamless product data integration.

## Technologies Used

- **HTML5**: For the structure and layout of the form.
- **CSS3**: To style the form and ensure a user-friendly interface.
- **JavaScript**: For dynamic form interactions, including adding/removing images and specifications.
- **Fetch API**: Used to send the product data to the backend API.

## Installation and Setup

1. Clone the repository:
    
    ```bash
    bashCopiar código
    git clone https://github.com/your-username/product-registration-form.git
    
    ```
    
2. Navigate to the project directory:
    
    ```bash
    bashCopiar código
    cd product-registration-form
    
    ```
    
3. Open `index.html` in your preferred browser to view and use the form.

## Usage

- Fill out all required fields in the form. Mandatory fields are marked with a red asterisk.
- Use the "+" and "−" buttons to add or remove product images and specifications.
- Once all details are entered, click "Salvar produto" to submit the form data to the API.

## API Integration

This form is designed to work with an API that handles product data. The form submits a JSON object to the API, containing all the details entered by the user. Below is an example of the JSON structure:

```json
jsonCopiar código
{
  "sku": "example-sku",
  "name": "Product Name",
  "description": "Detailed product description",
  ...
  "variations": [
    {
      "ref": "example-ref",
      "sku": "variation-sku",
      "qty": 10,
      ...
    }
  ]
}

```

## Contributing

If you wish to contribute to this project, please fork the repository and create a pull request with your changes.
