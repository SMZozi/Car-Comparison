package com.example.student.carcomparisonapp;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.EditText;
import android.widget.TextView;

public class viewVehicle extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_view_vehicle);

        final DataBaseHandler db = new DataBaseHandler(this);

        TextView txtMake = (TextView) findViewById(R.id.txtMake);

        //vehicle Veh = db.getVehicle();
        //String make = Veh.getMake();
       // txtMake.append(make);
    }
}
