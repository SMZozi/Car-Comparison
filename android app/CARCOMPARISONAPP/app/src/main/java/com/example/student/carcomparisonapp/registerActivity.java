package com.example.student.carcomparisonapp;

        import android.content.Intent;
        import android.database.sqlite.SQLiteDatabase;
        import android.support.design.widget.Snackbar;
        import android.support.v7.app.AppCompatActivity;
        import android.os.Bundle;
        import android.view.View;
        import android.widget.Button;
        import android.widget.EditText;
        import android.widget.Toast;

public class registerActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);

        final DataBaseHandler db = new DataBaseHandler(this);



        final EditText edtUsername = (EditText) findViewById(R.id.edtUsername);
        final EditText edtPassword = (EditText) findViewById(R.id.edtPassword);
        final EditText edtName = (EditText) findViewById(R.id.edtName);
        final EditText edtSurname = (EditText) findViewById(R.id.edtSurname);
        final EditText edtConfirm = (EditText) findViewById(R.id.edtConfirm);

        Button btnSubmit = (Button) findViewById(R.id.btnSubmit);

        btnSubmit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String username = edtUsername.getText().toString();
                String password = edtPassword.getText().toString();
                String name = edtName.getText().toString();
                String surname = edtSurname.getText().toString();
                String confirm = edtConfirm.getText().toString();

                if (username.equals("") || password.equals("") || name.equals("") || surname.equals(""))
                {
                    Toast.makeText(getApplicationContext(),"some field are empty", Toast.LENGTH_SHORT).show();
                }

                else if (password.equals(confirm))
                {


                    try {
                        db.addUser(new User(username, password, name, surname));

                        Snackbar.make(v, "You have been succesfully created in database", Snackbar.LENGTH_LONG)
                                .setAction("Action", null).show();
                        Intent loginIntent = new Intent(getApplicationContext(), loginActivity.class);

                        startActivity(loginIntent);
                    } catch (Exception x) {
                        Snackbar.make(v, "An error occured could not insert user", Snackbar.LENGTH_LONG)
                                .setAction("Action", null).show();
                    }
                }

                else
                {
                    Toast.makeText(getApplicationContext(),"Password does not match", Toast.LENGTH_SHORT).show();
                }
            }
        });
    }


}
