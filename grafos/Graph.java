
package grafos;

import java.util.ArrayList; 
import java.util.List; 
  
// A directed graph using 
// adjacency list representation 
public class Graph { 
  
    // No. of vertices in graph 
    private int v;  
      
    // adjacency list  
    private ArrayList<Integer>[] adjList;  
      
    //Constructor 
    public Graph(int vertices){ 
          
        //initialise vertex count 
        this.v = vertices; 
          
        // initialise adjacency list 
        initAdjList();  
    } 
      
    // utility method to initialise 
    // adjacency list 
    @SuppressWarnings("unchecked") 
    private void initAdjList() 
    { 
        adjList = new ArrayList[v]; 
          
        for(int i = 0; i < v; i++) 
        { 
            adjList[i] = new ArrayList<>(); 
        } 
    } 
      
    // add edge from u to v 
    public void addEdge(int u, int v) 
    { 
        // Add v to u's list. 
        adjList[u].add(v);  
    } 
      
    // Prints all paths from 
    // 's' to 'd' 
    public void printAllPaths(int s, int d)  
    { 
        boolean[] isVisited = new boolean[v]; 
        ArrayList<Integer> pathList = new ArrayList<>(); 
          
        //add source to path[] 
        pathList.add(s); 
          
        //Call recursive utility 
        printAllPathsUtil(s, d, isVisited, pathList); 
    } 
  
    // A recursive function to print 
    // all paths from 'u' to 'd'. 
    // isVisited[] keeps track of 
    // vertices in current path. 
    // localPathList<> stores actual 
    // vertices in the current path 
    private void printAllPathsUtil(Integer u, Integer d, 
                                    boolean[] isVisited, 
                            List<Integer> localPathList) { 
          
        // Mark the current node 
        isVisited[u] = true; 
          
        if (u.equals(d))  
        { 
            System.out.println(localPathList); 
            // if match found then no need to traverse more till depth 
            isVisited[u]= false; 
            return ; 
        } 
          
        // Recur for all the vertices 
        // adjacent to current vertex 
        for (Integer i : adjList[u])  
        { 
            if (!isVisited[i]) 
            { 
                // store current node  
                // in path[] 
                localPathList.add(i); 
                printAllPathsUtil(i, d, isVisited, localPathList); 
                  
                // remove current node 
                // in path[] 
                localPathList.remove(i); 
            } 
        } 
          
        // Mark the current node 
        isVisited[u] = false; 
    } 
  
    // Driver program 
    public static void main(String[] args)  
    { 
        // Create a sample graph 
        Graph g = new Graph(7); 
        
        g.addEdge(0,1); 
        g.addEdge(0,3); 
        
        g.addEdge(1,0);
        g.addEdge(1,2);
        g.addEdge(1,3);
        g.addEdge(1,4);
        
        g.addEdge(2,1);
        g.addEdge(2,4);
        
        g.addEdge(3,0);
        g.addEdge(3,1);
        g.addEdge(3,4);
        g.addEdge(3,5);
        
        g.addEdge(4,1);
        g.addEdge(4,2);
        g.addEdge(4,3);
        g.addEdge(4,5);
        g.addEdge(4,6);
        
        g.addEdge(5,3);
        g.addEdge(5,4);
        g.addEdge(5,6);
        
        g.addEdge(6,4);
        g.addEdge(6,5);
        
      
        // arbitrary source 
        int s = 0; 
      
        // arbitrary destination 
        int d = 4; 
      
        System.out.println("A = 0");
        System.out.println("B = 1");
        System.out.println("C = 2");
        System.out.println("D = 3");
        System.out.println("E = 4");
        System.out.println("F = 5");
        System.out.println("G = 6");
        System.out.println("");
      
        System.out.println("Possíveis caminhos entre "+s+" e "+d); 
        g.printAllPaths(s, d); 
  
    } 
} 

