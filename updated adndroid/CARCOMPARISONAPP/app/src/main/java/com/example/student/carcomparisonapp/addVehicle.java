package com.example.student.carcomparisonapp;

import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class addVehicle extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add_vehicle);


        final DataBaseHandler db = new DataBaseHandler(this);
        Button btnAddVeh = (Button) findViewById(R.id.btnAddVeh);
        final EditText edtMake = (EditText) findViewById(R.id.edtMake);
        final EditText edtModel = (EditText) findViewById(R.id.edtModel);
        final EditText edtPrice = (EditText) findViewById(R.id.edtPrice);
        final EditText edtColour = (EditText) findViewById(R.id.edtColour);

        btnAddVeh.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v)
            {
               String make = edtMake.getText().toString();
               String model = edtModel.getText().toString();
               String price = edtPrice.getText().toString();
               String colour = edtColour.getText().toString();

               if(make.equals("") || model.equals("") || price.equals("") || colour.equals(""))
               {
                   Toast.makeText(getApplicationContext(),"some field are empty", Toast.LENGTH_SHORT).show();
               }

               else
               {
                   try
                   {
                       db.addVehicle(new vehicle(make, model, price, colour));
                       Snackbar.make(v, "new vehicle have been succesfully created in database", Snackbar.LENGTH_LONG)
                               .setAction("Action", null).show();
                   }
                   catch (Exception e)
                   {
                       Snackbar.make(v, "An error occured could not insert vehicle", Snackbar.LENGTH_LONG)
                               .setAction("Action", null).show();
                   }
               }
            }
        });
    }
}
