using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.EventSystems;
using UnityEngine.UI;

public class Switching : MonoBehaviour
{
    // Start is called before the first frame update
    EventSystem switching;
    void Start()
    {
        switching = EventSystem.current;
    }

    // Update is called once per frame
    void Update()
    {
        if (Input.GetKeyDown(KeyCode.Tab))
        {
            //Selectable next = switching.currentSelectedGameObject.GetComponent < Selectable().FindSelectableOnDown();
        }
    }
}
