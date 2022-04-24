using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Networking;
using UnityEngine.SceneManagement;
using UnityEngine.UI;
using TMPro;
public class Login : MonoBehaviour
{
    [SerializeField] Text user;
    [Space]
    [SerializeField] TMP_InputField username;
    [SerializeField] TMP_InputField password;

    [SerializeField] Text errorMessages;


    [SerializeField] Button loginButton;


    [SerializeField] string url;

    WWWForm form;
    public void Login_btn()
    {
        loginButton.interactable = false;
        
    }
    public void Loginin()
    {
        errorMessages.text = ""; //CLEAR ANY DISPLAYED MESSAGES TO THE PLAYER


        if (username.text == "" || password.text == "") //IF THE PLAYER HASN'T ENTERED THE REQUIRED INFORMATION...TELL THEM TO
            errorMessages.text = "Please complete all fields.";
        else    //IF ALL INFORMATION IS ENTERED, BUILD A WWWForm AND SEND IT TO THE SERVER
        {
            WWWForm form = new WWWForm();
            form.AddField("username", username.text);
            form.AddField("password", password.text);
            WWW w = new WWW("http://localhost:81/belepes", form);    //REPLACE ?????????? WITH YOUR AWARD SPACE DOMAIN
            
        }
    }
    private IEnumerator Loginin(WWW _w)
    {
        yield return _w;    //WAIT FOR A RESPONSE FROM THE SERVER

        if (_w.error == null)    //IF THE SERVER DOESN'T SEND BACK AN ERROR
        {
            if (_w.text == "Log in successful!")    //THE PHP SCRIPT SUPPLIED WILL SEND THIS MESSAGE BACK IF THE LOGIN WAS SUCCESSFUL
            {
                // WHAT HAPPENS WHEN THE PLAYER LOGS IN
            }
            else
                errorMessages.text = _w.text;    //THE PHP SCRIPT SUPPLIED WILL TELL THE PLAYER IF THEIR PASSWORD IS INCORRECT, OR IF THEIR USERNAME DOESN'T EXIST
        }
        else
            errorMessages.text = "ERROR: " + _w.error;    //IF THERE IS AN ERROR (SUCH AS THE SERVER BEING DOWN) THE PHP SCRIPT SUPPLIED WILL TELL THE PLAYER
    }
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {

    }
}
