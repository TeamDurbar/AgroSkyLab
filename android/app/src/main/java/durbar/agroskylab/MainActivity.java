package durbar.agroskylab;

import android.content.Context;
import android.content.SharedPreferences;
import android.graphics.Typeface;
import android.os.Bundle;
import android.support.design.widget.NavigationView;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.FrameLayout;

import durbar.agroskylab.fragment.CropFragment;
import durbar.agroskylab.fragment.CropSuggestionFragment;
import durbar.agroskylab.fragment.DisasterFragment;
import durbar.agroskylab.fragment.HistoryFragment;
import durbar.agroskylab.fragment.IllegalCropsFragment;
import durbar.agroskylab.fragment.NewsFeedFragment;
import durbar.agroskylab.fragment.SoilFragment;

public class MainActivity extends AppCompatActivity {
    private Toolbar mToolbar;
    int mFlipping = 0;
    NavigationView mNavigationView;
    private DrawerLayout mDrawerLayout;
    FrameLayout mContentFrame;
    android.app.Fragment fragment = null;
    private static final String PREFERENCES_FILE = "pref_file";
    private static final String PREF_USER_LEARNED_DRAWER = "navigation_drawer_learned";
    private static final String STATE_SELECTED_POSITION = "selected_navigation_drawer_position";
    private boolean mUserLearnedDrawer;
    private boolean mFromSavedInstanceState;
    private static int selectedPosition;
    String language;
    SharedPreferences sharedPreferences;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        initializeToolBar();
        mDrawerLayout = (DrawerLayout) findViewById(R.id.navigation_drawer);
        mNavigationView = (NavigationView) findViewById(R.id.navigation_view);
        mContentFrame = (FrameLayout) findViewById(R.id.nav_contentframe);
        Typeface font = Typeface.createFromAsset(getApplicationContext().getAssets(), "RobotoLight.ttf");
        mUserLearnedDrawer = Boolean.valueOf(readSharedSetting(this, PREF_USER_LEARNED_DRAWER, "false"));
        if (savedInstanceState == null) {
            setFragment();
        } else if (savedInstanceState != null) {
            selectedPosition = savedInstanceState.getInt(STATE_SELECTED_POSITION);
            mFromSavedInstanceState = true;
        }
        setUpNavDrawer();
        mNavigationView.setNavigationItemSelectedListener(new NavigationView.OnNavigationItemSelectedListener() {
            @Override
            public boolean onNavigationItemSelected(MenuItem menuItem) {
                menuItem.setChecked(true);
                switch (menuItem.getItemId()) {

                    case R.id.navigation_item_soil:
                        fragment = new SoilFragment();
                        setFragment();
                        selectedPosition = 0;
                        mDrawerLayout.closeDrawers();
                        getSupportActionBar().setTitle(R.string.nav_item_soil);
                        return true;
                    case R.id.navigation_item_crop:
                        fragment = new CropFragment();
                        setFragment();
                        selectedPosition = 1;
                        mDrawerLayout.closeDrawers();
                        getSupportActionBar().setTitle(R.string.nav_item_crop);
                        return true;
                    case R.id.navigation_item_crop_suggestion:
                        fragment = new CropSuggestionFragment();
                        setFragment();
                        selectedPosition = 2;
                        mDrawerLayout.closeDrawers();
                        getSupportActionBar().setTitle(R.string.nav_item_crop_suggesstion);
                        return true;
                    case R.id.navigation_item_history:
                        fragment = new HistoryFragment();
                        setFragment();
                        selectedPosition = 6;
                        mDrawerLayout.closeDrawers();
                        getSupportActionBar().setTitle(R.string.nav_item_history);
                        return true;
                    case R.id.navigation_item_disaster:
                        fragment = new DisasterFragment();
                        setFragment();
                        selectedPosition = 3;
                        mDrawerLayout.closeDrawers();
                        getSupportActionBar().setTitle(R.string.nav_item_disaster);
                        return true;
                    case R.id.navigation_item_newsfeed:
                        fragment = new NewsFeedFragment();
                        setFragment();
                        selectedPosition = 5;
                        mDrawerLayout.closeDrawers();
                        getSupportActionBar().setTitle(R.string.nav_item_news_feed);
                        return true;
                    default:
                        getSupportActionBar().setTitle(R.string.app_name);
                        return true;
                }


            }
        });

    }

    public void setFragment() {
        if (fragment == null) {
            fragment = new SoilFragment();
            android.app.FragmentManager fragmentManager = getFragmentManager();
            fragmentManager.beginTransaction()
                    .replace(R.id.nav_contentframe, fragment, "A").commit();
        } else if (fragment != null) {
            android.app.FragmentManager fragmentManager = getFragmentManager();
            fragmentManager.beginTransaction()
                    .replace(R.id.nav_contentframe, fragment, "B").commit();

        }
    }

    @Override
    public void onSaveInstanceState(Bundle outState) {
        super.onSaveInstanceState(outState);
        outState.putInt(STATE_SELECTED_POSITION, selectedPosition);
    }

    @Override
    protected void onRestoreInstanceState(Bundle savedInstanceState) {
        super.onRestoreInstanceState(savedInstanceState);
        selectedPosition = savedInstanceState.getInt(STATE_SELECTED_POSITION, 0);
        Menu menu = mNavigationView.getMenu();
        menu.getItem(selectedPosition).setChecked(true);
    }


    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        int id = item.getItemId();
        return super.onOptionsItemSelected(item);
    }

    private void initializeToolBar() {
        mToolbar = (Toolbar) findViewById(R.id.toolbar);
        if (mToolbar != null) {
            setSupportActionBar(mToolbar);
        }
    }

    private void setUpNavDrawer() {
        if (mToolbar != null) {
            getSupportActionBar().setDisplayHomeAsUpEnabled(true);
            mToolbar.setNavigationIcon(R.drawable.ic_drawer);
            mToolbar.setNavigationOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View v) {
                    mDrawerLayout.openDrawer(GravityCompat.START);
                }
            });
        }

        if (!mUserLearnedDrawer) {
            mDrawerLayout.openDrawer(GravityCompat.START);
            mUserLearnedDrawer = true;
            saveSharedSetting(this, PREF_USER_LEARNED_DRAWER, "true");
        }

    }

    public static void saveSharedSetting(Context ctx, String settingName, String settingValue) {
        SharedPreferences sharedPref = ctx.getSharedPreferences(PREFERENCES_FILE, Context.MODE_PRIVATE);
        SharedPreferences.Editor editor = sharedPref.edit();
        editor.putString(settingName, settingValue);
        editor.apply();
    }

    public static String readSharedSetting(Context ctx, String settingName, String defaultValue) {
        SharedPreferences sharedPref = ctx.getSharedPreferences(PREFERENCES_FILE, Context.MODE_PRIVATE);
        return sharedPref.getString(settingName, defaultValue);
    }

    @Override
    public void onBackPressed() {
        if (selectedPosition > 0) {
            getSupportActionBar().setTitle(R.string.app_name);
            getFragmentManager().beginTransaction()
                    .replace(R.id.nav_contentframe, new SoilFragment(), "A").commit();
            selectedPosition = 0;

        } else {
            super.onBackPressed();
        }

    }

}
