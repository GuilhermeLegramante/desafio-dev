package composite_iterator;

import java.util.*;

public class Composite extends Component implements Iterator {

    private final LinkedList<Element> list;
    private int count;
    private int qtd;

    public Composite() {
        list = new <Element> LinkedList();
        count = 0;
        qtd = 0;
    }

    public void addElements(Element element) {
        list.add(element);
        ++qtd;
    }

    public LinkedList getElements() {
        LinkedList r = new LinkedList<Element>();
        for (Element e : list) {
            r.add(e.getElements());
        }
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
