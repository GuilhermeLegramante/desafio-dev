package composite_iterator;

import java.util.LinkedList;
import java.util.List;

public class Element extends Component implements Iterator {

    private LinkedList<Element> list;
    private int count;
    private int qtd;

    public Element() {
        list = new <Element> LinkedList();
        count = 0;
        qtd = 0;
    }

    public void addElements(Element element) {
        list.add(element);
        ++qtd;
    }

    public List getElements() {
        LinkedList r = new LinkedList();
        r.add(this);
        return r;
    }

    @Override
    public boolean hasNext() {
        if (count >= list.size() || list.get(count) == null) {
            count = 0;
            return false;
        } else {
            return true;
        }
    }

    @Override
    public Object next() {
        Element element = list.get(count);
        ++count;
        return element;
    }

}
