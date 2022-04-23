using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;
using UnityEngine.UI;

public class Login : MonoBehaviour
{
    bool login = false;
    public Text login_text;
    public Text password_text;
    public Button login_button;

    public void Login_btn()
    {
        if (login_button)
        {
            login = true;
        }        
        if (!login)
        {
            SceneManager.LoadScene("Game-Menu");
        }
        else
        {
            Debug.Log("Nincs név és jelszó");
        }
    }
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        
    }
}
