using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class hit_success : MonoBehaviour
{
    public bool canPress;
    public KeyCode Key;
    public GameObject hitEffect,good,bad;
   

    public object Manager { get; private set; }

    // Start is called before the first frame update
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {
        if (Input.GetKeyDown(Key))
        {
            if (canPress)
            {
                gameObject.SetActive(false);
                GameManager.instance.NoteHit();
                
            }
        }
    }

    private void OnTriggerEnter2D(Collider2D other)
    {
        Debug.Log("Hit!");
        if (other.tag == "Activator")
        {
            canPress = true;
            
        }
    }
    private void OnTriggerExit2D(Collider2D other)
    {
        Debug.Log("Missed");
        if (other.tag == "Activator")
        {
            canPress = false;
            GameManager.instance.NoteMissed();
        }
    }
}
