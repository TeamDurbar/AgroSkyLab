package durbar.agroskylab;

import android.content.Context;
import android.content.Intent;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.os.AsyncTask;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.widget.Toast;

/**
 * Created by Osman Goni Nahid on 4/22/2016.
 */
public class SplashActivity extends AppCompatActivity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash);

        new Waiter().execute();
    }

    private class Waiter extends AsyncTask<Void, Void, Void> {


        @Override
        protected Void doInBackground(Void... params) {


            try {
                Thread.sleep(3000);
            } catch (Exception e) {

                e.printStackTrace();
            }


            return null;
        }

        @Override
        protected void onPostExecute(Void aVoid) {

            if (isNetworkAvailable()) {
                startActivity(new Intent(SplashActivity.this, MainActivity.class));
                overridePendingTransition(R.anim.slide_out_left, R.anim.slide_in_right);
                finish();

            } else {

                Toast.makeText(SplashActivity.this, "No Internet Connection Check Data Connection", Toast.LENGTH_LONG).show();
                finish();

            }
        }

        private boolean isNetworkAvailable() {
            ConnectivityManager connectivityManager
                    = (ConnectivityManager) getSystemService(Context.CONNECTIVITY_SERVICE);
            NetworkInfo activeNetworkInfo = connectivityManager.getActiveNetworkInfo();
            return activeNetworkInfo != null && activeNetworkInfo.isConnected();
        }
    }
}
