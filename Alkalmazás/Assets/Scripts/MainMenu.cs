using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;
public class MainMenu : MonoBehaviour
{
    public void ExitBtn()
    {
        Application.Quit();
        Debug.Log("Game Closed");
    }
    public void TutorialBtn()
    {
        SceneManager.LoadScene("Level-Tutorial");
    }
    public void StartBtn()
    {
        Debug.Log("A játék elindult! ");
    }
    public void Settings()
    {
        Debug.Log("Megnyílik a Settings fül");
    }
}
