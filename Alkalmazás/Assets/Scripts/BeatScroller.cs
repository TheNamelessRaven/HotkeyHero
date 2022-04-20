using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class BeatScroller : MonoBehaviour
{
    public GameObject circle;
    public GameObject circle2;
    public GameObject circle3;
    public GameObject circle4;
    public float beatTempo;
    public bool Started;
    List<GameObject> CircleList;

    void Start()
    {
        beatTempo = beatTempo / 60f;
        CircleList = new List<GameObject>();
    }

    // Update is called once per frame
    void Update()
    {
        if (!Started)
        {
            Debug.Log("Nyomj egy gombot!");
        }
        else
        {
            transform.position -= new Vector3(0f, Time.deltaTime, 0f);
            foreach(GameObject go in CircleList)
            {
                go.transform.position -= new Vector3(0f, Time.deltaTime, 0f);
            }
            if (Random.Range(0, 100f) > 99.9f)
            {
                int a = Mathf.FloorToInt(Random.Range(0, 3.99f));
                switch (a)
                {
                    case 0:
                        CircleList.Add(Instantiate(circle, new Vector3(-1.51f + 0.96f * a, 10.79f, 6.7433f), Quaternion.identity));
                        break;
                    case 1:
                        CircleList.Add(Instantiate(circle2, new Vector3(-1.51f + 0.96f * a, 10.79f, 6.7433f), Quaternion.identity));
                        break;
                    case 2:
                        CircleList.Add(Instantiate(circle3, new Vector3(-1.51f + 0.96f * a, 10.79f, 6.7433f), Quaternion.identity));
                        break;
                    case 3:
                        CircleList.Add(Instantiate(circle4, new Vector3(-1.51f + 0.96f * a, 10.79f, 6.7433f), Quaternion.identity));
                        break;
                    default:
                        break;
                }
                                
            }
            
        }
    }
}
